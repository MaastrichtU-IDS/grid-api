import React from 'react';
import { 
    HydraAdmin,
    ResourceGuesser,
    ListGuesser,
    ShowGuesser,
    CreateGuesser,
    EditGuesser,
    FieldGuesser,
    InputGuesser
 } from '@api-platform/admin';
// Full examplet at https://github.com/api-platform/demo/blob/master/admin/src/App.js

// const AchievementList = props => (
//     <ListGuesser {...props}>
//         <FieldGuesser source={"id"} />
//     </ListGuesser>
// );
const SessionList = props => (
    <ListGuesser {...props}>
        <FieldGuesser source={"id"} />
    </ListGuesser>
);
const SessionCreate = props => (
    <CreateGuesser {...props}>
        <InputGuesser source={"id"} />
    </CreateGuesser>
);
const SessionShow = props => (
    <ShowGuesser {...props}>
        <FieldGuesser source={"id"} />
    </ShowGuesser>
);
const SessionEdit = props => (
    <EditGuesser {...props}>
        <InputGuesser source={"id"} />
    </EditGuesser>
);

export default () => (
    <HydraAdmin entrypoint={process.env.REACT_APP_API_ENTRYPOINT}>
        {/* <ResourceGuesser name={"achievements"} list={AchievementList} /> */}
        <ResourceGuesser name={"sessions"}
            list={SessionList}
            create={SessionCreate}
            show={SessionShow}
            create={SessionCreate}
            edit={SessionEdit} />
    </HydraAdmin>);
