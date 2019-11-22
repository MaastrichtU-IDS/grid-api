import React from 'react';
import { HydraAdmin, ResourceGuesser } from '@api-platform/admin';
// Full examplet at https://github.com/api-platform/demo/blob/master/admin/src/App.js

const AchievementList = props => (
    <ListGuesser {...props}>
        <FieldGuesser source={"id"} />
    </ListGuesser>
);
const SessionList = props => (
    <ListGuesser {...props}>
        <FieldGuesser source={"id"} />
    </ListGuesser>
);

export default () => (
    <HydraAdmin entrypoint={process.env.REACT_APP_API_ENTRYPOINT}>
        <ResourceGuesser name={"achievements"} list={AchievementList} />
        <ResourceGuesser name={"sessions"} list={SessionList}/>
    </HydraAdmin>);
